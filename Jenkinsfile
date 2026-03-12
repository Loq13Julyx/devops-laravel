node {

    stage('Clone Repository') {
        git branch: 'main', url: 'https://github.com/Loq13Julyx/devops-laravel.git'
    }

    stage('Build') {
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh 'rm -f composer.lock'
            sh 'composer install'
        }
    }

    stage('Testing') {
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }

}
