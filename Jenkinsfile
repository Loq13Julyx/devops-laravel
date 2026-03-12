node {

    stage('Clone Repository') {
        git branch: 'main', url: 'https://github.com/Loq13Julyx/devops-laravel.git'
    }

    stage('Build') {
        docker.image('composer:2').inside('-u root') {
            sh 'composer install'
        }
    }

    stage('Testing') {
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Testing pipeline berhasil"'
        }
    }

}
