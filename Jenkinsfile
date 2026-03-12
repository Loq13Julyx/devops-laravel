node {
    checkout scm
    // Ambil source code dari repository
    // stage('Checkout') {
    //     checkout scm
    // }

    // Build aplikasi
    stage('Build') {
        docker.image('shippingdocker/php-composer:7.4').inside('-u root') {
            sh 'rm -f composer.lock'
            sh 'composer install'
        }
    }

    // Testing
    stage('Testing') {
        docker.image('ubuntu').inside('-u root') {
            sh 'echo "Ini adalah test"'
        }
    }

}
