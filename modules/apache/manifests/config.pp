# modules/apache/manifests/config.pp
class apache::config(
  $document_root = $apache::params::document_root
) inherits apache::params {
	
	file { '/etc/apache2/sites-available/vagrant.conf':
    ensure  => present,
    content => template('apache/virtual-hosts.conf.erb')
  }

  file { '/etc/apache2/sites-enabled/000-default.conf':
    ensure => absent
  }

  file { '/etc/apache2/sites-enabled/vagrant.conf':
    ensure => link,
    target => '/etc/apache2/sites-available/vagrant.conf',
  }
}