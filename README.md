# Auto Blog

Essa é uma aplicação que tem como objetivo automatizar a criação de posts em um blog. A ideia é que o usuário possa reutilizar o seu perfil no [Medium](https://medium.com/) para criar posts em seu blog.

## Tecnologias

- [PHP](https://www.php.net/)
- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Instalação

Para instalar a aplicação, siga os passos abaixo:

1. Clone o repositório:

```bash
git clone <URL_DO_REPOSITORIO>
```

2. Acesse a pasta do projeto:

```bash
cd auto-blog
```

3. Suba o container:

```bash
docker-compose up -d
```

## Utilização

O uso da aplicação é bem simples. Basta acessar a URL com os parâmetros necessários:

```bash
http://localhost:8000/?url=<URL_DO_PERFIL_NO_MEDIUM>&title=<TITULO_DO_BLOG>

# Exemplo
http://localhost:8000/?url=https://medium.com/@sschonss&title=Meu%20Blog
```

Depois de acessar a URL, o sistema irá criar um arquivo com o conteúdo do blog na pasta raiz e renderizar o conteúdo na tela.

## Contribuição

Para contribuir com o projeto, siga os passos abaixo:

1. Faça um fork do projeto
2. Crie uma nova branch com a sua feature:

```bash
git checkout -b feature/nova-feature
```

3. Faça o commit das suas alterações:

```bash
git commit -m 'Adicionando nova feature'
```

4. Faça o push para a sua branch:

```bash
git push origin feature/nova-feature
```

5. Abra um Pull Request
6. Aguarde a análise
7. Após a aprovação, o seu código será mergeado
