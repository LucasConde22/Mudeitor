# Traductor de lengua de señas a audio y texto
Aplicación para dispositivos Android que permitirá traducir lengua de señas (ASL o LSA) a audio y texto.

## Objetivo
 El objetivo de este proyecto es crear la primera aplicación en lograr una eficiente tradución de la lengua de señas a distintos idiomas, tales como español o inglés. Esto permitirá que las personas sordas puedan counicarse sin problemas con el resto de la sociedad, rompiendo con una dura barrera que los desplaza de la misma.

## ¿Como funcionará?
 La aplicación capturará imágenes mediante la utilización de OpenCV2 y luego las comparará con un dataset mediante la utilización de TensorFlow Lite el cual realizará una detección de objetos para dar como resultado la letra/palabra que el usuario esta diciendo. Luego, esta será mostrada por pantalla y reproducida mediante una voz.

# ¿Como va a estar compuesto el dataset?
 Esta aplicación va a tener la opción de seleccionar el dataset deseado a utilizar, habrá dos opciones. Uno para ASL (American Sign Language), compuesto por todo el alfabeto, y uno para LSA (Lengua de Señas Argentina), compuesto por 16 de las palabras más utilizadas. Lamentablemente, los datasets son un poco "cortos" debido a la gran difiicultad para su creación.
 El dataset para ASL será creado por nosotros mediante la compilación de diversos datasets encontrados en internet, principlamnete en Kaggle. En cambio, el dataset utilizado para LSA será el siguiente: http://facundoq.github.io/datasets/lsa16/
