node {

    stage('Clone Repository') {
        git branch: 'main', url: 'https://github.com/Loq13Julyx/devops-laravel.git'
    }

    stage('Build') {
        docker.image('composer:2').inside('-u root --entrypoint=""') {
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

            sshagent(credentials: ['ssh-prod']) {

                sh '''
                mkdir -p ~/.ssh
                chmod 700 ~/.ssh

                ssh-keyscan -H 103.240.110.18 >> ~/.ssh/known_hosts

                rsync -rav --delete ./ \
                ubuntu@103.240.110.18:/home/ubuntu/prod.kelasdevops.xyz/ \
                --exclude=.env \
                --exclude=storage \
                --exclude=.git
                '''
            }

        }
    }

}
