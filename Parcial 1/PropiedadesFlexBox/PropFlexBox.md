##¿Qué es FlexBox?

Flexbox es un sistema de recursos flexibles que llega con la iniciativa de olvidar dichos mecanismos y acostumbrarnos a una mecánica más potente, limpia y personalizable, en la que los recursos HTML se adaptan y colocan automáticamente y es más simple personalizar los diseños.

<img src="https://www.arsys.es/blog/file/uploads/2017/09/flexbox.jpg">


|Las tablas de contenido son: |
| :- |
|Flex-flow|
|Justify-content|
|Align-items|
|Align-content|

### <div style="text-align: center"> Flex-flow

La propiedad CSS **flex-flow** es una propiedad atajo para las propiedades individuales flex-direction y flex-wrap.

Valor inicial:

>- flex-direction: row
>- flex-wrap: none

##

### <div style="text-align: center"> Justify-content

Para situar los márgenes y justificados de los ítems es una propiedad muy práctica. Bien puedes justificarlos al inicio del eje o al final, colocar un espacio entre ellos o entre ellos y los bordes.

Posibles Valores: 

|Propiedad|Posible Valor|
| - | - |
|Justify-content|Flex-start, flex-end. center, space-around, space-between|

>- __flex-start:__ A partir del inicio del eje principal añadimos los elementos.

#####

>- __flex-end:__ Se añaden a partir del final del eje principal.

#####

>- __center:__ centramos los elementos respecto al eje principal.

#####

>- __space-between:__ La distribución entre los elementos será proporcional y los ítems de los extremos se ubicarán en el borde del contenedor.

#####

>- __space-around:__ como el anterior pero dejando espacio entre los bordes y los ítems de los extremos.

### <div style="text-align: center"> Align-items

La propiedad CSS align-items instituye el costo align-self sobre todos los descendientes directos de un conjunto.

>- __flex-start:__ el posicionamiento será al principio del eje secundario.

#####

>- __flex-end:__ el posicionamiento será al final del eje secundario.
>- __center:__ se centran respecto al eje secundario.

#####

>- __stretch:__ llenará el total del eje secundario.

#####

>- __baseline:__ se posicionará teniendo en cuenta el texto que hay dentro. 

##
### <div style="text-align: center">Align-content

Esta propiedad se usara en varias filas de elementos dentro del contenedor Flexbox y se obtendra una alineación y separación respecto al eje secundario. El efecto de este será similar al de *align-items*, pero indicando la colocación de todas las filas y definiendo la separación entre los ítems.

>- __flex-start:__ pegadas entre sí las filas y al inicio del eje secundario.

#####

>- __flex-end:__ pegadas entre sí las filas y al final del eje secundario.

#####

>- __center:__ centrado respecto al eje secundario.
#####
>- __stretch:__ Ocupará todo el espacio disponible.

#####
 
>- __space-between:__ las filas se separan entre ellas y dejan un espacio proporcional.

#####

>- __space-around:__ las filas se separan y dejan un espacio proporcional entre ellas, incluido el borde.




