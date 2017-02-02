node default {
	include updating_packages
    class { 'apache':
      document_root => '/vagrant'
    }
    include mysql
    include php
}