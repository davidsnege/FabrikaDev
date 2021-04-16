* [Licensing](#licensing)

## Quick start

- Clone the repo: `git clone https://github.com/davidsnege/FabrikaDev/tree/master/php/firma_digital`.
- [Download from Github](https://github.com/davidsnege/FabrikaDev/tree/master/php/firma_digital).

# Preview

## Documentation

### PT-BR

- Firma Digital é um pequeno trecho de código que eu criei com o objetivo de ajudar outros desenvolvedores que necessitam salvar
as assinaturas de clientes em um formato de imagem ou legitimar algum documento firmado online, ele usa bibliotecas JavaScript de
outras pessoas que tem o formato Open Source também, por isso este trecho de código também é open source e pode ser baixado, 
utilizado, modificado ao seu gosto, para isso só pedimos que mantenha os inicios de código com o autor e dados de acesso a este 
github, no futuro pretendo deixar integrado um modo de já salvar na base de dados a direção da assinatura ou os próprios dados
canvas da assinatura diretamente na base de dados.

### ES-es

- Firma Digital es un pequeño fragmento de código que creé para ayudar a otros desarrolladores que necesitan guardar
firmas de clientes en formato de imagen o legitimar cualquier documento firmado en línea, utiliza bibliotecas JavaScript de
otras personas que también tienen el formato de código abierto, por lo que este fragmento de código también es de código abierto y se puede descargar,
usado, modificado a su gusto, para eso solo le pedimos que mantenga el código que comienza con el autor y que acceda a los datos a este
github, en el futuro tengo la intención de dejar integrada una forma de guardar en la base de datos la dirección de la firma o los datos en sí
lienzo de firma directamente en la base de datos.

### EN-en

- Firma Digital is a small piece of code that I created in order to help other developers who need to save
customer signatures in an image format or legitimize any document signed online, it uses JavaScript libraries from
other people who have the Open Source format too, so this code snippet is also open source and can be downloaded,
used, modified to your liking, for that we only ask you to keep the code starts with the author and access data to this
github, in the future I intend to leave integrated a way of already saving in the database the direction of the signature or the data itself
signature canvas directly in the database.

#### david snege - Que a força esteja com você.

The documentation for the Firma Digital is hosted at gitHub or more information: davidsnege.com [website](http://davidsnege.com).

## File Structure
Within the download you'll find the following directories and files:

```
firma_digital/
├── app
│   ├── fpdf182
│   ├── images
│   │   └── 20200529093125.png
│   ├── pdfs
│   │   └── 20200529093125.pdf
│   ├── default.php
├── css
│   └── style.css
├── js
│   ├── actions.js
│   ├── canvas.js
│   └── sign.js
├── md
│   └── filestoMDfile
├── index.php
├── readme.md
```

## Reporting Issues

We use GitHub Issues as the official bug tracker for the Firma Digital. Here are some advices for our users that want to report an issue:

## Licensing

- 2020 davidsnege (http://davidsnege.com/)
- Licensed under Open Source

![Product Png](http://davidsnege.com/wp-content/uploads/2020/05/descarga.png)

## Libraries JS JQUERY

- https://www.jqueryscript.net/other/Canvas-Signature-Pad-Sign.html
- https://www.jqueryscript.net/other/Touch-enabled-Signature-Plugin-with-jQuery-Canvas.html
- https://www.jqueryscript.net/other/Smooth-Signature-Pad-Plugin-with-jQuery-Html5-Canvas.html

## Libraries PDF

- http://www.fpdf.org/

### How to use FPDF to create your PDFs

- Minimal Exemple : 
-- http://www.fpdf.org/en/tutorial/tuto1.htm
- Header, footer, page break and image : 
-- http://www.fpdf.org/en/tutorial/tuto2.htm
- Line breaks and colors
-- http://www.fpdf.org/en/tutorial/tuto3.htm
- Multi-columns
-- http://www.fpdf.org/en/tutorial/tuto4.htm
- Tables
-- http://www.fpdf.org/en/tutorial/tuto5.htm
- Links and flowing text
-- http://www.fpdf.org/en/tutorial/tuto6.htm
- Adding new fonts and encodings
-- http://www.fpdf.org/en/tutorial/tuto7.htm

#### Another examples

- Exemple 1
-- https://desarrolloweb.com/articulos/funcion-image-fpdf.html
- Another Tutorial (9 parts)
-- https://www.studentstutorial.com/fpdf/introduction.php

# Log 

## 29/05/2020 11:37

- PT-BR 
-- Adicionado a possibilidade de gravar um PDF e exibir na tela depois de gravado
-- Se pode salvar o PDF pelo navegador

- ES-es
-- Se agregó la posibilidad de guardar un PDF y mostrarlo en la pantalla después de guardar
-- Si puede guardar el PDF a través del navegador

- EN-en
-- Added the possibility to save a PDF and display it on the screen after saving
-- You can save the PDF via the browser

