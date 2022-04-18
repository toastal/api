# API de Oficialía Mayor

Una API RESTful de sistemas web para Oficialía Mayor.

> Basado en la arquitectura de micro servicios.

[Documentación oficial.](https://ricardogj08.notion.site/API-de-Oficial-a-Mayor-d6f94be08d7f4e738418a0f13ee98216)

## Servicios

* Registro y consulta de empleados (`admin`).
* Clima Laboral y Cultura Organizacional (`clima`).

## Dependencias

* [Lumen 9.x - Un micro framework de PHP por Laravel.](https://lumen.laravel.com/docs/9.x)
* [MySQL](https://www.mysql.com/) o [MariaDB](https://mariadb.com/) - Un sistema gestor de bases de datos relacionales.

## Configuración de las bases de datos

Crea las bases de datos del proyecto:

```sql
CREATE DATABASE IF NOT EXISTS admin
  CHARACTER SET = 'utf8mb4'
  COLLATE       = 'utf8mb4_spanish_ci';
```

```sql
CREATE DATABASE IF NOT EXISTS clima
  CHARACTER SET = 'utf8mb4'
  COLLATE       = 'utf8mb4_spanish_ci';
```

## Referencias

* [Cómo elegir una licencia para su obra.](https://www.gnu.org/licenses/license-recommendations.es.html)
* [¿Qué es el copyleft?](https://www.gnu.org/licenses/copyleft.html)
* [Por qué es necesaria la GPL Affero.](https://www.gnu.org/licenses/why-affero-gpl.html)
* [Cómo utilizar las licencias de GNU para su propio software.](https://www.gnu.org/licenses/gpl-howto.es.html)
* [Documentación oficial de Lumen.](https://lumen.laravel.com/docs/9.x)
* [Conceptos de la arquitectura de Laravel.](https://laravel.com/docs/9.x/lifecycle)
* [Iniciando con Laravel.](https://laravel.com/docs/9.x/installation)
* [Rutas con Laravel.](https://laravel.com/docs/9.x/routing)
* [Middlewares con Laravel.](https://laravel.com/docs/9.x/middleware)
* [Protección contra ataques CSRF con Laravel.](https://laravel.com/docs/9.x/csrf)
* [Controladores con Laravel.](https://laravel.com/docs/9.x/controllers)
* [Peticiones HTTP con Laravel.](https://laravel.com/docs/9.x/requests)
* [Respuestas HTTP con Laravel.](https://laravel.com/docs/9.x/responses)
* [Generador de URLs con Laravel.](https://laravel.com/docs/9.x/urls)
* [Sesiones HTTP con Laravel.](https://laravel.com/docs/9.x/session)
* [Validaciones con Laravel.](https://laravel.com/docs/9.x/validation)
* [Manejo de errores con Laravel.](https://laravel.com/docs/9.x/errors)
* [Logs con Laravel](https://laravel.com/docs/9.x/logging)
* [Artisan de Laravel.](https://laravel.com/docs/9.x/artisan)
* [Colecciones de datos con Laravel.](https://laravel.com/docs/9.x/collections)
* [Contratos de Laravel](https://laravel.com/docs/9.x/contracts)
* [Eventos con Laravel.](https://laravel.com/docs/9.x/events)
* [Herramientas de ayuda de Laravel.](https://laravel.com/docs/9.x/helpers)
* [Cliente HTTP de Laravel.](https://laravel.com/docs/9.x/http-client)
* [Localización de idiomas con Laravel.](https://laravel.com/docs/9.x/localization)
* [Limitador de velocidad de acciones con Laravel.](https://laravel.com/docs/9.x/rate-limiting)
* [Pruebas con Laravel.](https://laravel.com/docs/9.x/testing)
* [Autenticaciones con Laravel.](https://laravel.com/docs/9.x/authentication)
* [Autorizaciones con Laravel.](https://laravel.com/docs/9.x/authorization)
* [Cifrado de contraseñas con Laravel.](https://laravel.com/docs/9.x/hashing)
* [Bases de datos con Laravel.](https://laravel.com/docs/9.x/database)
* [Eloquent ORM con Laravel.](https://laravel.com/docs/9.x/eloquent)

## Licencia

```text
API de Oficialía Mayor - Una API RESTful de sistemas web para Oficialía Mayor.

Copyright (C) 2022 - Ricardo García Jiménez <ricardogj08@riseup.net>,
                     Oficialía Mayor de Celaya,Guanajuato,México <maria.ramirez@celaya.gob.mx>

Este programa es software libre: puedes redistribuirlo y/o modificarlo
bajo los términos de la Licencia Pública General de GNU Affero publicada por
la Free Software Foundation, ya sea la versión 3 de la Licencia, o
(a su elección) cualquier versión posterior.

Este programa se distribuye con la esperanza de que sea de utilidad,
pero SIN NINGUNA GARANTÍA; incluso sin la garantía implícita de
COMERCIABILIDAD o APTITUD PARA UN PROPÓSITO PARTICULAR. Consulte la
Licencia Pública General de GNU Affero para obtener más detalles.

Debería haber recibido una copia de la Licencia Pública General de GNU Affero
junto con este programa. De lo contrario, consulte <https://www.gnu.org/licenses/>.
```
