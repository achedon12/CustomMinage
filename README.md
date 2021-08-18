# About

/!\ PLUGIN IN DEVELOPMENT

![CustomMinage](icon.jpg)

[FR] Simple plugin configurable de minage

[ENG] Simple configurable mining plugin

-----------------

## Permissions

    use.setMinage


-----------------

## Base configuration

    #   _____          _                  __  __ _
    #  / ____|        | |                |  \/  (_)
    # | |    _   _ ___| |_ ___  _ __ ___ | \  / |_ _ __   __ _  __ _  ___
    # | |   | | | / __| __/ _ \| '_ ` _ \| |\/| | | '_ \ / _` |/ _` |/ _ \
    # | |___| |_| \__ \ || (_) | | | | | | |  | | | | | | (_| | (_| |  __/
    #  \_____\__,_|___/\__\___/|_| |_| |_|_|  |_|_|_| |_|\__,_|\__, |\___|
    #                                                           __/ |
    # ____                       _              _            _|___/
    # |  _ \            /\       | |            | |          /_ |__ \
    # | |_) |_   _     /  \   ___| |__   ___  __| | ___  _ __ | |  ) |
    # |  _ <| | | |   / /\ \ / __| '_ \ / _ \/ _` |/ _ \| '_ \| | / /
    # | |_) | |_| |  / ____ \ (__| | | |  __/ (_| | (_) | | | | |/ /_
    # |____/ \__, | /_/    \_\___|_| |_|\___|\__,_|\___/|_| |_|_|____|
    #         __/ |
    #        |___/

    # Plugin Version | do not touch this
    version: "v1.0"


    # Configure message in game
    Message:
        NoPerm: "§4/!\ §fYou don't have the permission to use this command"
        NoPlayer: "Please run this command in game"
    # Use {port} to obtain the port in the message
    # Use {ip} to obtain the ip in the message
        ConfirmationSetupExternal: "You have set your transfer server to §d {port} {ip}"
    # Use {worldname} to obtain the worldname you setup
        ConfirmationSetupLocalWorld:

    FormMessage:
        TitleExternal: "CustomMinage - ExternalMinage >> Port/Minage"
        Port: "Please enter the complete address for the server transfer"
        Ip: "Please enter the full ip for the server transfer"
        TitleLocal: "CustomMinage - LocalMinage >> World"
        ContentLocal: "Please select the minage world"
        DropdownLocal: "Server World List"
        TitleLanguage: "CustomMinage - Language"
        DropdownLanguage: "Language available"
        LabelLanguage: "Choose your language"



    # Please put true or false in "local" or "external"
    # external = server transfer
    # local = world transfer
    Minage:
        external: "true"
        local: "false"

    External:
        Port: "lizara-pytha-panel.online"
        Ip: "25565"

    Local:
        World: "minage"

    # Set your favorite Language <FR | ENG | ESP>
    # Coming soon
    Language: "FR"

-----------------

## Credit

[FR] N'hésitez pas à donner votre avis sur le plugin et sur quoi il peut être amélioré

[ENG] Feel free to give your opinion on the plugin and on what it can be improved

-----------------

## Contact

[discord] achedon12#0034

[my minecraft server](https://discord.gg/gmEyCzUJg2)

[my github](https://github.com/leoderoin)

[my discord shop](https://discord.gg/Mnc6SMr9zB)