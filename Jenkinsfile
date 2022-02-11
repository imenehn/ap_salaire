node{
    stage('Clone') {
        checkout scm
    }

    stage('Init') {
        sh "apk add ansible sshpass"
        sh "rm -rf /root/.ssh"
        sh "echo '192.168.56.102 app-salaire.imene.form' > /etc/hosts"
        sh "ssh-keygen -q -t rsa -N '' -f ~/.ssh/id_rsa"
        sh "sshpass -p 'root' ssh-copy-id -o stricthostkeychecking=no root@app-salaire.imene.form"
    }

    stage('Ansible') {
      ansiblePlaybook (
          colorized: true,          
          playbook: 'playbook.yml',
          inventory: 'hosts.yml'
      )
    }
}
