# Docker Apache/PHP/React Boilerplate

Get up and running quickly and deploy to the Heroku container registry no sweat.

Once the project is cloned run:

```angular2html
docker-compose build
docker-compose up web db webpack
```

The webpack container is set up to watch any .jsx files included in main.jsx.

When you want to deploy just run 
```
heroku container:push web 
```
with a Heroku app initialized in the project directory.