CREATE TABLE disciplina (
  id_disciplina INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuarios_id_usuarios INTEGER UNSIGNED NOT NULL,
  nome_disciplina CHAR(50) NULL,
  cod_cargaHoraria INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_disciplina),
  INDEX disciplina_FKIndex1(usuarios_id_usuarios)
);

CREATE TABLE disciplina_has_docente (
  disciplina_id_disciplina INTEGER UNSIGNED NOT NULL,
  docente_id_docente INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(disciplina_id_disciplina, docente_id_docente),
  INDEX disciplina_has_docente_FKIndex1(disciplina_id_disciplina),
  INDEX disciplina_has_docente_FKIndex2(docente_id_docente)
);

CREATE TABLE disciplina_has_turma (
  disciplina_id_disciplina INTEGER UNSIGNED NOT NULL,
  turma_id_turma INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(disciplina_id_disciplina, turma_id_turma),
  INDEX disciplina_has_turma_FKIndex1(disciplina_id_disciplina),
  INDEX disciplina_has_turma_FKIndex2(turma_id_turma)
);

CREATE TABLE disponibilidade (
  id_disponibilidade INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  docente_id_docente INTEGER UNSIGNED NOT NULL,
  cod_DiaSemana INTEGER UNSIGNED NULL,
  cod_Horario INTEGER UNSIGNED NULL,
  cod_Turno INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_disponibilidade),
  INDEX disponibilidade_FKIndex1(docente_id_docente)
);

CREATE TABLE docente (
  id_docente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuarios_id_usuarios INTEGER UNSIGNED NOT NULL,
  nome_docente CHAR(50) NULL,
  cpf_docente CHAR(11) NULL,
  matricula_docente CHAR(20) NULL,
  status_docente BOOL NULL,
  PRIMARY KEY(id_docente),
  INDEX docente_FKIndex1(usuarios_id_usuarios)
);

CREATE TABLE docente_has_turma (
  docente_id_docente INTEGER UNSIGNED NOT NULL,
  turma_id_turma INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(docente_id_docente, turma_id_turma),
  INDEX docente_has_turma_FKIndex1(docente_id_docente),
  INDEX docente_has_turma_FKIndex2(turma_id_turma)
);

CREATE TABLE turma (
  id_turma INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  usuarios_id_usuarios INTEGER UNSIGNED NOT NULL,
  nome_turma CHAR(50) NULL,
  cod_codigo CHAR(20) NULL,
  cod_turno INTEGER UNSIGNED NULL,
  PRIMARY KEY(id_turma),
  INDEX turma_FKIndex1(usuarios_id_usuarios)
);

CREATE TABLE usuarios (
  id_usuarios INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  email_usuario CHAR(50) NULL,
  senha_usuario CHAR(20) NULL,
  status_usuario BOOL NULL,
  PRIMARY KEY(id_usuarios)
);


