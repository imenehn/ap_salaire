node{
    stage('Clone') {
        checkout scm
    }

    stage('Init') {
        sh "apk add ansible sshpass"
        sh "rm -rf /root/.ssh"
        sh "echo '192.168.56.107 app-salaire.hicham.form' > /etc/hosts"
        sh "ssh-keygen -q -t rsa -N '' -f ~/.ssh/id_rsa"
        sh "sshpass -p 'root' ssh-copy-id -o stricthostkeychecking=no root@app-salaire.hicham.form"
    }

    stage('Ansible') {
      ansiblePlaybook (
          colorized: true,          
          playbook: 'playbook.yml',
          inventory: 'hosts.yml'
      )
    }
}
