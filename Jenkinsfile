// this is test
pipeline {
    agent any

    environment {
        IMAGE_NAME = "minthcm/minthcm:latest"      // Update with your correct image
        CONTAINER_NAME = "minthcm-web"      // Update with your correct container name
        SCANNER_HOME = tool 'SonarScanner'
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
                sh "docker build -t minthcm/minthcm:latest -f docker/Dockerfile ."
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
                docker run -d -p 80:80 --name $CONTAINER_NAME $IMAGE_NAME
                '''
            }
        }
        stage('Trivy Scan') {
            steps {
                script {
                    // Run Trivy vulnerability scan on the built Docker image
                    sh 'trivy image --no-progress --exit-code 1 --severity HIGH,CRITICAL minthcm/minthcm:latest'
                }
            }
        }
        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube') {
                    sh '/opt/sonar-scanner/bin/sonar-scanner \
                    -Dsonar.sources=. \
                    -Dsonar.projectKey=php-app \
                    -Dsonar.host.url=http://ec2-18-170-212-19.eu-west-2.compute.amazonaws.com:9000'
                }
            }
        }

        stage('Quality Gate') {
            steps {
                script {
                    timeout(time: 5, unit: 'MINUTES') {
                        waitForQualityGate abortPipeline: true
                    }
                }
            }
        }
    }
}


