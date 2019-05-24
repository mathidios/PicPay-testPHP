
## PicPay - Teste de PHP

- [Dependencies](#dependencies)
- [Setup](#setup)
- [Database](#Database)
- [Staging](#staging)
- [Style](#style)

## Dependencies

- PHP >= 7.0
- MySQL >= 5.7.19

## Setup

```sh
composer install
```

## Database

```mysql
CREATE TABLE `picpaytestphp`.`user` (
  `iduser` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `UserNome` VARCHAR(50) NOT NULL,
  `UserCpf` VARCHAR(14) NOT NULL,
  `UserPhone` VARCHAR(13) NOT NULL,
  `UserEmail` VARCHAR(50) NOT NULL,
  `UserPassword` LONGTEXT NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `UserEmail_UNIQUE` (`UserEmail` ASC),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC));
```

# API
/api/register/newuser
Realiza o cadastro do usuário ao receber os parametros 'UserNome', 'UserCpf', 'UserPhone', 'UserEmail', 'UserPassword'
retorna true se sucesso ou mensagem de erro a ser tratada.