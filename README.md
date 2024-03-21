# Debungado PHP com VsCode e Xdebug

Este repositório oferece uma estrutura prática para o desenvolvimento e debugging de aplicações **PHP** utilizando **Docker**, com suporte à versão 8.2 do **PHP** e à versão 3 do **Xdebug**.

Os arquivos fornecidos aqui configuram um ambiente pronto para facilitar o processo de debug e desenvolvimento de suas aplicações **PHP** utilizando **Docker**.

## Iniciando

Com o VsCode já instalado nessa adicione a extenção abaixo :

[PHP Debug](https://pestphp.com/](https://marketplace.visualstudio.com/items?itemName=xdebug.php-debug )


## Clonando o diretorio

1. Clone este repositório:

```bash
git clone https://github.com/wanderleyfa/php-docker-xdebug.git
```
2. acesse o diretorio:
```bash
cd php-docker-xdebug
```

<img width="268" alt="Estrutura de pastas do projeto" src="https://github.com/wanderleyfa/php-docker-xdebug/assets/489674/e39b4831-4fae-40ed-8953-63355ddd6e87">

3. Execute o seguinte comando para iniciar os contêineres Docker:

```bash
docker-compose up -d --build
```

4. após as imagens serem criadas, acesse o link da aplicação, como exemplo **http://localhost:8080/**


## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir problemas ou enviar solicitações de pull.

## Licença

Este projeto está sob a licença MIT.

