pipeline {
   agent any
   environment {
        DOCKERHUB_CREDENTIALS = credentials('dockerhub')
   }
   stages {
     stage ('scm checkout') {
       steps {
         git branch: 'main', credentialsId: 'github-jenkins', url: 'https://github.com/ShashikantSingh09/web.git'
       }
     }

     stage ('build') {
       steps {
         sh 'docker build -t starkz09/web .'
       }
     }

    stage ('Login') {
      steps {
        sh 'echo $DOCKERHUB_CREDENTIALS_PSW | docker login -u $DOCKERHUB_CREDENTIALS_USR --password-stdin'
      }
    }

    stage ('Push') {
      steps {
        sh 'docker push starkz09/web'
      }
    }

    stage ('Scan Image') {
      steps {
        sh 'trivy image starkz09/web'  
  }
  post {
    always {
      sh 'docker logout'
    }
  }
}
