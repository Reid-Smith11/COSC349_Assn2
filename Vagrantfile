# -*- mode: ruby -*-
# vi: set ft=ruby :


Vagrant.configure("2") do |config|
  # Online Vagrantfile documentation is at https://docs.vagrantup.com.

  # No box file needed
  config.vm.box = "dummy"

  config.vm.provider :aws do |aws, override|
   
    aws.region = "us-east-1"


    override.nfs.functional = false
    override.vm.allowed_synced_folder_types = :rsync


   	
    aws.keypair_name = "cosc349"
    override.ssh.private_key_path = "~/.ssh/cosc349.pem"

    # We choose micro due to the price
    aws.instance_type = "t2.micro"

    # These are the security groups for each VM
    aws.security_groups = ["sg-016dc8fcf5f77d18b"]

    
    aws.availability_zone = "us-east-1b"
    aws.subnet_id = "subnet-3f678472"

    
    aws.ami = "ami-0378588b4ae11ec24"

    
    override.ssh.username = "ubuntu"
  end
  
  # Provisioning both webservers - one for uploading embed links to the database
  # the other for playing the YouTube videos

  config.vm.define "linkServer" do |linkServer|
	linkServer.vm.hostname = "linkServer"
	linkServer.vm.provision "shell", path: "linkServer.sh"
  end

  config.vm.define "playServer" do |playServer|
	playServer.vm.hostname = "playServer"
	playServer.vm.provision "shell", path: "playServer.sh"
  end
end
