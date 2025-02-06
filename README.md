Aqui puedes consultar la [sintaxis para archivos README.md](https://docs.github.com/es/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax).

# A first-level heading

## A second-level heading

### A third-level heading

**This is bold text**

_This text is italicized_

~~This was mistaken text~~

**This text is _extremely_ important**

This is a <sub>subscript</sub> text

This is a <sup>superscript</sup> text

This is an <ins>underlined</ins> text

# Citas 
Text that is not a quote

> Text that is a quote

# Formatear Codigo
Para formatear código o texto en su propio bloque distintivo, usa comillas invertidas triples.

Some basic Git commands are:
```
git status
git add
git commit
```

# Vinculos
Puede crear un vínculo en línea escribiendo su texto entre corchetes [ ] y escribiendo la URL entre paréntesis ( ). También puede usar el método abreviado de teclado Command+K para crear un vínculo. Cuando haya seleccionado texto, puede pegar una dirección URL del Portapapeles para crear automáticamente un vínculo a partir de la selección.

También puedes crear un hipervínculo de Markdown resaltando el texto y usando el método abreviado de teclado Comando+V. Si quieres reemplazar el texto por el vínculo, usa el método abreviado de teclado Comando+Mayús+V.

This site was built using [GitHub Pages](https://pages.github.com/).

# Imagenes
Puede mostrar una imagen agregando ! y ajustar el texto alternativo en [ ]. El texto alternativo es un texto corto equivalente a la información de la imagen. Luego, escribe el vínculo de la imagen entre paréntesis ().

![Screenshot of a comment on a GitHub issue showing an image, added in the Markdown, of an Octocat smiling and raising a tentacle.](https://myoctocat.com/assets/images/base-octocat.svg)

# Listas
Puedes crear una lista sin ordenar. Para ello, coloca -, * o + antes de una o más líneas de texto.

# Listas de tareas
Para crear una lista de tareas, debe añadir como prefijo un guion y espacio, seguido de [ ] a los elementos de la lista. Para marcar una tarea como completada, use [x].

Si la descripción de un elemento de la lista de tareas comienza por un paréntesis, necesitará agregar el carácter de escape \:

- [ ] \(Optional) Open a followup issue

# Alertas
Las alertas son una extensión Markdown basada en la sintaxis blockquote que puede utilizar para resaltar la información crítica. En GitHub, se muestran con colores e iconos distintivos para indicar la importancia del contenido.

Deben usarse las alertas solo cuando sean cruciales para el éxito del usuario y limitarlas a una o dos por artículo para evitar sobrecargar al lector. Además, debe evitarse colocar alertas consecutivamente. Las alertas no se pueden anidar dentro de otros elementos.

Para agregar una alerta, debe usarse una línea blockquote especial que especifique el tipo de alerta, seguida de la información de alerta en un blockquote estándar. Existen cinco tipos de alertas.

> [!NOTE]
> Useful information that users should know, even when skimming content.

> [!TIP]
> Helpful advice for doing things better or more easily.

> [!IMPORTANT]
> Key information users need to know to achieve their goal.

> [!WARNING]
> Urgent info that needs immediate user attention to avoid problems.

> [!CAUTION]
> Advises about risks or negative outcomes of certain actions.