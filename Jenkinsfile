pipeline {
    agent any

    environment {
        IMAGE_NAME = "minthcm/minthcm"      // Update with your correct image
        CONTAINER_NAME = "minthcm-web"      // Update with your correct container name
    }

    stages {
        stage('Clone Repository') {
            steps {
                echo "Cloning repository..."
                checkout scm
            }
        }

        stage('Build Docker Image') {
            steps {
                sh "docker build -t $IMAGE_NAME ."
            }
        }

        stage('Stop & Remove Old Container') {
            steps {
                sh '''
                docker stop $CONTAINER_NAME || true
                docker rm $CONTAINER_NAME || true
                '''
            }
        }

        stage('Run New Container') {
            steps {
                sh '''
                docker run -d -p 80:80 --name minthcm-web minthcm/minthcm
                '''
            }
        }
    }
}


