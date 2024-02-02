<?php 

return [
    'schedules' => 'Programaciones',
    'manage-schedules' => 'Gestionar programaciones',
    'create-schedule' => 'Crear programación',
    'name' => 'Nombre',
    'last-run-at' => 'Última ejecución',
    'next-run-at' => 'Próxima ejecución',
    'status' => 'Estado',
    'active' => 'Activa',
    'inactive' => 'Inactiva',
    'processing' => 'Procesando',
    'manage-schedule' => 'Gestionar programación',
    'new-task' => 'Nueva tarea',
    'run-now' => 'Ejecutar ahora',
    'editBtn' => 'Editar',
    'n/a' => 'n/a',
    'never' => 'nunca',

    'no-schedules' => 'No hay programaciones configuradas para este servidor.',
    'ignore-files-folders' => 'Ignorar archivos y carpetas',
    'continues-on-failure' => 'Continuar en caso de fallo',
    'later' => 'más tarde',

    'minute' => 'Minuto',
    'hour' => 'Hora',
    'day' => 'Día',
    'week' => 'Semana',
    'day-of-month' => 'Día del mes',
    'month' => 'Mes',
    'day-of-week' => 'Día de la semana',

    'deleteTask' => [
        'title' => 'Confirmar eliminación de tarea',
        'description' => '¿Estás seguro de que quieres eliminar esta tarea? Esta acción no se puede deshacer.',
        'delete' => 'Eliminar tarea'
    ],
    'delete' => [
        'title' => 'Eliminar programación',
        'description' => 'Todas las tareas se eliminarán y cualquier proceso en ejecución se detendrá.',
        'delete' => 'Eliminar'
    ],
    'edit' => [
        'title-1' => 'Editar programación',
        'title-2' => 'Crear nueva programación',

        'description' => 'El sistema de programación admite el uso de la sintaxis Cronjob para definir cuándo deben comenzar a ejecutarse las tareas. Utiliza los campos de arriba para especificar cuándo deben comenzar a ejecutarse estas tareas.',
        
        'name' => 'Nombre de la programación',
        'name-description' => 'Un identificador legible para esta programación.',
        'cheatsheet' => 'Mostrar chuleta',
        'cheatsheet-description' => 'Mostrar la chuleta de cron para algunos ejemplos',
        'online-when-online' => 'Solo cuando el servidor está en línea',
        'online-when-online-description' => 'Solo ejecutar esta programación cuando el servidor esté en estado de ejecución.',
        'enabled' => 'Programación habilitada',
        'enabled-description' => 'Esta programación se ejecutará automáticamente si está habilitada.',

        'save-changes' => 'Guardar cambios',
    ],
    'cheatsheet' => [
        'example' => 'Ejemplos',
        'every-5-minutes' => 'cada 5 minutos',
        'every-hour' => 'cada hora',
        'hour-range' => 'rango de horas',
        'once-a-day' => 'una vez al día',
        'every-monday' => 'cada lunes',
        'special-characters' => 'Caracteres especiales',
        'any-value' => 'cualquier valor',
        'value-list-separator' => 'separador de lista de valores',
        'range-values' => 'valores de rango',
        'step-values' => 'valores de paso',
    ],
    'task' => [
        'message' => 'No se puede crear una tarea de respaldo cuando el límite de respaldo del servidor está establecido en 0.',
        'edit-task' => 'Editar tarea',
        'save-changes' => 'Guardar cambios',
        'create-task' => 'Crear tarea',
        'action' => 'Acción',
        'send-command' => 'Enviar comando',
        'send-power-action' => 'Enviar acción de energía',
        'create-backup' => 'Crear respaldo',
        'offset' => 'Desfase de tiempo (en segundos)',
        'offset-description' => 'La cantidad de tiempo que debe esperar después de que se ejecute la tarea anterior antes de ejecutar esta. Si esta es la primera tarea en una programación, esto no se aplicará.',
        'payload' => 'Carga',
        'ignored-files' => 'Archivos ignorados',
        'ignored-files-description' => 'ignored-files-description' => 'Opcional. Incluya los archivos y carpetas a excluir en esta copia de seguridad. Por defecto, se utilizará el contenido de su archivo .pteroignore. Si ha alcanzado su límite de copias de seguridad, la copia de seguridad más antigua se rotará.',
        'start-server' => 'Iniciar el servidor',
        'stop-server' => 'Detener el servidor',
        'restart-server' => 'Reiniciar el servidor',
        'kill-server' => 'Terminar el servidor',
        'continue-on-failure' => 'Continuar en caso de fallo',
        'continue-on-failure-description' => 'Las tareas futuras se ejecutarán cuando esta tarea falle.',
    ],
];
