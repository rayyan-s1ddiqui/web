pipeline {
    agent any
    
    environment {
        DOCKER_IMAGE = 'web'
        DOCKER_REGISTRY = 'https://starkz09.jfrog.io'
        DOCKER_REPO = 'starkz09/web'
        ARTIFACTORY_CREDENTIALS_ID = 'your-artifactory-credentials-id'
        AWS_CREDENTIALS_ID = 'aws-key'
        ECS_CLUSTER_NAME = 'web-cluster'
        ECS_SERVICE_NAME = 'web-service'
        ECS_TASK_FAMILY = 'web-task'
        ECS_CONTAINER_NAME = 'web'
        AWS_REGION = 'us-east-1'
    }
    
    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                script {
                    dockerImage = docker.build("${DOCKER_REGISTRY}/${DOCKER_REPO}:${BUILD_NUMBER}")
                }
            }
        }

        stage('Push Docker Image to JFrog Artifactory') {
            steps {
                script {
                    withCredentials([usernamePassword(credentialsId: ARTIFACTORY_CREDENTIALS_ID, usernameVariable: 'USERNAME', passwordVariable: 'PASSWORD')]) {
                        docker.withRegistry("https://${DOCKER_REGISTRY}", "${USERNAME}:${PASSWORD}") {
                            dockerImage.push("${BUILD_NUMBER}")
                            dockerImage.push("latest")
                        }
                    }
                }
            }
        }

        stage('Deploy to ECS') {
            steps {
                script {
                    withAWS(credentials: AWS_CREDENTIALS_ID, region: AWS_REGION) {
                        sh """
                        aws ecs update-service --cluster ${ECS_CLUSTER_NAME} --service ${ECS_SERVICE_NAME} --force-new-deployment
                        """
                    }
                }
            }
        }
    }

    post {
        always {
            cleanWs()
        }
    }
}
