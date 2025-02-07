#Steps for Jenkins pipeline
pipeline {
    agent any

    environment {
        IMAGE_NAME = "myapp"  // Name of your Docker image
        CONTAINER_NAME = "myapp_container"
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'master', url: 'https://github.com/sajinatamang99/MintHCM-HR.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $minthcm .'
            }
        }

        stage('Stop & Remove Old Container') {
            steps {
                sh '''
                docker stop $minthcm-web || true
                docker rm $minthcm-web || true
                '''
            }
        }

        stage('Run New Container') {
            steps {
                sh 'docker run -d -p 80:80 --name $minthcm-web $minthcm'
            }
        }
    }
}
