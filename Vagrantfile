Vagrant.require_version '>= 1.6.3'

Vagrant.configure("2") do |config|

  config.vm.box = "utopic-server-cloudimg-amd64-vagrant-disk1"
  config.vm.box_url = "https://cloud-images.ubuntu.com/vagrant/utopic/current/utopic-server-cloudimg-amd64-vagrant-disk1.box"
  config.vm.hostname = "zahnarzt-kosten.info"

  config.vm.network "forwarded_port", guest: 3306, host: 3306
  config.vm.network "forwarded_port", guest: 80, host: 8080

  config.vm.provision :ansible do |ansible|
    ansible.playbook = "./provision.yml"

    ansible.groups = {
      "all-in-one" => "default"
    }

  end
end
