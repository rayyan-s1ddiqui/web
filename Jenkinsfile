pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'cloudsec.jfrog.io/security-docker/web'
        DOCKER_REGISTRY = 'cloudsec.jfrog.io'
        DOCKER_REPO = 'admin-web'
        ARTIFACTORY_CREDENTIALS = credentials('jfrog')
        AWS_CREDENTIALS = credentials('aws-key')
        ECS_CLUSTER_NAME = 'web-cluster'  
        ECS_SERVICE_NAME = 'web-service'
        AWS_REGION = 'us-east-1'
    }

    stages {
        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/ShashikantSingh09/web.git', credentialsId: 'my-git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh "docker build -t ${DOCKER_IMAGE}:${BUILD_NUMBER} ."
            }
        }

        stage ('Login') {
            steps {
                sh 'echo $ARTIFACTORY_CREDENTIALS_PSW | docker login -u$ARTIFACTORY_CREDENTIALS_USR ${DOCKER_REGISTRY} --password-stdin'
            }
        }

        stage ('Push') {
            steps {
                sh "docker push ${DOCKER_IMAGE}:${BUILD_NUMBER}"
            }
        }

        stage('Deploy to ECS') {
            steps {
                script {
                        sh """
                        aws ecs update-service --cluster ${ECS_CLUSTER_NAME} --service ${ECS_SERVICE_NAME} --force-new-deployment
                        """
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
