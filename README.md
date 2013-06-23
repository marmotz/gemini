Reminders:
~~~~~~~~~~



Workflow:

L'application demande au DeploymentStrategy de s'initialiser.
    exemple:
        FromLocalDeploymentStrategy créé un répertoire de travail
        RemoteDeploymentStrategy se connecte en ssh au serveur et créé un répertoire de travail

DeploymentStrategy utilise Source pour récupérer le code source du site
    exemple:
        GitSource va faire un git clone/pull pour récupérer les sources
        FtpSource va récupérer les sources par ftp
        * FromLocalDeploymentStrategy va transférer les sources au serveur distant

DeploymentStrategy utilise ReleaseStrategy pour organiser le code source et les releases




source:
    fs
    vcs
        git
        hg
        svn
    remote
        ftp
        scp
        rsync

stratégie de déploiement:
    from local
    remote

strégie de release:
    x releases, symlink vers la release courrante, static à part
    remplacement