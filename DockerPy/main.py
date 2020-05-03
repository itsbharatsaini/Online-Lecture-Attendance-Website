import os
while True:
    print("\t\t\t      WELLCOME")
    print("\t\t\t\tto")
    print("\t\t\t!!...DockerPy...!!")
    print('''

    Choose an Option...
        
    [1]-->Docker Installation
    [2]-->Docker Compose Installation
    [3]-->Launch a complete website
    [4]-->Stop the website
    [5]-->Exit
        ''')
    try:
        option = int(input('''Enter Your Choice ==> '''))
    except:
        print("\nInput Should Be a Integer.")
    if option == 1:
        os.system("cp MyDocker_Repo.repo/etc/yum.repos.d/")
        os.system("yum install docker-ce --nobest")
        os.system("clear")
        print("\nDocker is succesfully installed")
    
    elif option == 2:
        os.system('curl -L "https://github.com/docker/compose/releases/download/1.25.5/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose')
        os.system("chmod +x /usr/local/bin/docker-compose")
        os.system("clear")
        print("\nDocker-compose is succesfully installed")
    
    elif option == 3:
        os.system("systemctl disable firewalld")
        os.system("systemctl start docker")
        os.system("docker pull wordpress:latest")
        os.system("docker pull mysql:latest")
        os.system("docker-compose up -d")
        os.system("cp volumes /var/lib/docker/")
        os.system("systemctl enable httpd")
    
    elif option == 4:
        os.system("docker-compose down -d")
    elif option == 5:
        os.system("clear")
        exit()
    else:
        os.system("clear")
        print("\nChoose Correct Option.")
        print("Please Try again...")