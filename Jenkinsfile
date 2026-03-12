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

    stage('Deploy Production') {
        docker.image('agung3wi/alpine-rsync:1.1').inside('-u root') {
            sshagent (credentials: ['ssh-prod']) {

                sh 'mkdir -p ~/.ssh'
                sh 'ssh-keyscan -H "$PROD_HOST" > ~/.ssh/known_hosts'

                sh """
                rsync -rav --delete ./ \
                ubuntu@$PROD_HOST:/home/ubuntu/prod.kelasdevops.xyz/ \
                --exclude=.env \
                --exclude=storage \
                --exclude=.git
                """
            }
        }
    }

}
