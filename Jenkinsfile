#Steps for Jenkins pipelines
pipeline {
    agent any

    environment {
        IMAGE_NAME = "minthcm/minthcm"  // Name of your Docker image
        CONTAINER_NAME = "myapp_container"
        GITHUB_REPO = "https://github.com/sajinatamang99/MintHCM-HR.git"
        BRANCH_NAME = "master" // Change to the correct branch if needed
    }

    stages {
        stage('Clone Repository') {
            steps {
                git branch: 'master', url: 'https://github.com/sajinatamang99/MintHCM-HR.git'
            }
        }

        stage('Build Docker Image') {
            steps {
                sh 'docker build -t $minthcm/minthcm .'
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
                sh 'docker run -d -p 80:80 --name $minthcm-web $minthcm/minthcm'
            }
        }
    }
}
