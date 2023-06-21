FROM centos:7

# install yum-utils
RUN yum -y install yum-utils

# install libevent
RUN yum -y install libevent libevent-devel

# install php8.1 libs
RUN yum -y install epel-release
RUN yum -y install https://mirrors.aliyun.com/remi/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php81
RUN yum -y install php-cli php-event php-posix php-pcntl php-zip php-openssl php-devel php-gd php-mbstring php-curl php-xml php-simplexml php-fileinfo php-sodium php-pear php-bcmath php-json php-mysqlnd php-redis php-amqp php-imagick  --skip-broken

# copy project
RUN mkdir /app
COPY ./ /app
RUN chmod -R 777 /app/public /app/runtime

# clean all
RUN yum clean all

ENTRYPOINT ["php", "/app/start.php", "start"]