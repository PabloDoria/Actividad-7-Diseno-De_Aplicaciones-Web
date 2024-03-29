
   INFO  Preparing database.  

  Creating migration table ............................................................................................................... 10ms DONE

   INFO  Running migrations.  

  2019_12_14_000001_create_personal_access_tokens_table ............................................................................................  
  Ôçé create table `personal_access_tokens` (`id` bigint unsigned not null auto_increment primary key, `tokenable_type` varchar(255) not null, `tokenable_id` bigint unsigned not null, `name` varchar(255) not null, `token` varchar(64) not null, `abilities` text null, `last_used_at` timestamp null, `expires_at` timestamp null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `personal_access_tokens` add index `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type`, `tokenable_id`)  
  Ôçé alter table `personal_access_tokens` add unique `personal_access_tokens_token_unique`(`token`)  
  CrearTablaKit ....................................................................................................................................  
  Ôçé create table `kits` (`id` bigint unsigned not null auto_increment primary key, `clave` varchar(255) not null, `contenido` text not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `kits` add unique `kits_clave_unique`(`clave`)  
  CrearTablaTipogrupo ..............................................................................................................................  
  Ôçé create table `tipo_grupos` (`id` bigint unsigned not null auto_increment primary key, `nombre` varchar(255) not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  CrearTablaUsuario ................................................................................................................................  
  Ôçé create table `usuarios` (`id` bigint unsigned not null auto_increment primary key, `nombre` varchar(255) not null, `correo` varchar(255) not null, `contrasena` varchar(255) not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `usuarios` add unique `usuarios_correo_unique`(`correo`)  
  CrearTablaAministrador ...........................................................................................................................  
  Ôçé create table `aministrador` (`id` bigint unsigned not null auto_increment primary key, `rol` varchar(255) not null, `FK_IdTipoUsuario` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `aministrador` add constraint `aministrador_fk_idtipousuario_foreign` foreign key (`FK_IdTipoUsuario`) references `usuarios` (`id`)  
  CrearTablaProfesor ...............................................................................................................................  
  Ôçé create table `profesor` (`id` bigint unsigned not null auto_increment primary key, `fecha_de_nacimiento` date not null, `FK_IdTipoUsuario` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `profesor` add constraint `profesor_fk_idtipousuario_foreign` foreign key (`FK_IdTipoUsuario`) references `usuarios` (`id`)  
  CrearTablaGrupo ..................................................................................................................................  
  Ôçé create table `grupos` (`id` bigint unsigned not null auto_increment primary key, `clave` varchar(255) not null, `FK_IdTipoGrupo` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `grupos` add constraint `grupos_fk_idtipogrupo_foreign` foreign key (`FK_IdTipoGrupo`) references `tipo_grupos` (`id`)  
  CrearTablaAlumno .................................................................................................................................  
  Ôçé create table `alumno` (`id` bigint unsigned not null auto_increment primary key, `grado` varchar(255) not null, `FK_IdGrupo` bigint unsigned null, `FK_TipoUsuario` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `alumno` add constraint `alumno_fk_idgrupo_foreign` foreign key (`FK_IdGrupo`) references `grupos` (`id`) on delete set null  
  Ôçé alter table `alumno` add constraint `alumno_fk_tipousuario_foreign` foreign key (`FK_TipoUsuario`) references `usuarios` (`id`)  
  CrearTablaCurso ..................................................................................................................................  
  Ôçé create table `cursos` (`id` bigint unsigned not null auto_increment primary key, `titulo` varchar(255) not null, `contenido` text not null, `FK_IdKit` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `cursos` add constraint `cursos_fk_idkit_foreign` foreign key (`FK_IdKit`) references `kits` (`id`)  
  CrearTablaCursoGrupo .............................................................................................................................  
  Ôçé create table `curso_grupo` (`id` bigint unsigned not null auto_increment primary key, `FK_IdCurso` bigint unsigned not null, `FK_IdGrupo` bigint unsigned not null, `created_at` timestamp null, `updated_at` timestamp null) default character set utf8mb4 collate 'utf8mb4_unicode_ci'  
  Ôçé alter table `curso_grupo` add constraint `curso_grupo_fk_idcurso_foreign` foreign key (`FK_IdCurso`) references `cursos` (`id`)  
  Ôçé alter table `curso_grupo` add constraint `curso_grupo_fk_idgrupo_foreign` foreign key (`FK_IdGrupo`) references `grupos` (`id`)  

