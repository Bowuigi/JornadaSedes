# Ágora

Una aplicación web para gestionar jornadas de capacitación. Comisionado por el Instituto de Profesorado Sedes Sapientiae.

Actualmente en desarrollo, vea las [Incidencias](https://github.com/Agora-Sedes/Agora/issues) y las [Solicitudes de Cambios](https://github.com/Agora-Sedes/Agora/pulls) para ver el progreso actual.

## Funcionalidades

- Inscripción de oyentes
  - Formulario que solicita datos de identificación y contacto
  - Pago con Mercado Pago, tarjeta de débito o crédito, en RapiPago y más utilizando la API de Mercado Pago
  - Capacidad de inscribir más de un oyente a la vez
  - Verificación de pagos presenciales mediante códigos QR
  - Verificación de asistencias presenciales mediante códigos QR
- Panel de administradores
  - Inscripción de oyentes de último momento (cobro físico el mismo día de la charla, sin QR de verificación)
  - Editor de información sobre jornadas y charlas
  - Generación de certificados firmados digitalmente para certificar asistencias
  - Registros de jornadas anteriores, en caso de requerir verificación por parte de un tercero autorizado

## Ejecución

Utilizamos [Podman](https://podman.io/) con contenedores con [Alpine Linux](https://www.alpinelinux.org/) para garantizar entornos reproducibles.

Apenas clone el repositorio y cada vez que se añada una nueva dependencia, ejecute el siguiente comando para descargar las dependencias del proyecto:

```sh
podman run --rm -it -v .:/app -w /app alpine:latest sh install-dependencies.sh
```

Cada vez que quiera ejecutar el proyecto, utilice el siguiente comando:

```
podman compose up --build
```

El servicio toma un poco menos de un minuto para iniciar completamente. Presione Control+C para detener el servicio.
