-- backup_students
-- table students
-- after
-- delete
INSERT INTO `std_deleteds`(
 `idDeleted`,
 `nivel`,
 `fechaMatricula`,
 `nomAlumno`,
 `fechaNacimiento`,
 `genero`,
 `EdadAlumno`,
 `documentType`,
 `numDocumento`,
 `Esalud`,
 `EPS`,
 `numTelefonico`,
 `numTelefonicoUno`,
 `numTelefonicoDos`,
 `direccionAlumno`,
 `barrio`,
 `localidad`,
 `nombreMama`,
 `documentoMama`,
 `telefonoMama`,
 `direccionMama`,
 `correoMama`,
 `nombrePapa`,
 `documentoPapa`,
 `telefonoPapa`,
 `direccionPapa`,
 `correoPapa`,
 `nomPriRes`,
 `docPriRes`,
 `dirPriRes`,
 `telPriRes`,
 `nomSegRes`,
 `docSegRes`,
 `dirSegRes`,
 `telSegRes`,
 `nomTerRes`,
 `docTerRes`,
 `dirTerRes`,
 `telTerRes`,
 `created_at`,
 `updated_at`
 ) VALUES (
  old.id,
  old.nivel,
  old.fechaMatricula,
  old.nomAlumno,
  old.fechaNacimiento,
  old.genero,
  old.EdadAlumno,
  old.documentType,
  old.numDocumento,
  old.Esalud,
  old.EPS,
  old.numTelefonico,
  old.numTelefonicoUno,
  old.numTelefonicoDos,
  old.direccionAlumno,
  old.barrio,
  old.localidad,
  old.nombreMama,
  old.documentoMama,
  old.telefonoMama,
  old.direccionMama,
  old.correoMama,
  old.nombrePapa,
  old.documentoPapa,
  old.telefonoPapa,
  old.direccionPapa,
  old.correoPapa,
  old.nomPriRes,
  old.docPriRes,
  old.dirPriRes,
  old.telPriRes,
  old.nomSegRes,
  old.docSegRes,
  old.dirSegRes,
  old.telSegRes,
  old.nomTerRes,
  old.docTerRes,
  old.dirTerRes,
  old.telTerRes,
  old.created_at,
  old.updated_at)

-- charge_healt
-- table students
-- after
-- insert
INSERT INTO `control_healths`(
  `nomAlumno`,
  `numDocumento`,
  `edadAlumno`
) VALUES (
  new.nomAlumno,
  new.numDocumento,
  new.edadAlumno
)
