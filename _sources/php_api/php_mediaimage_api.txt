        
=====================
MediaImage
=====================
        
.. php:method:: public Render\APIs\APIv1\MediaItem MediaItem getMediaItem ()

	


	:returns: Render\APIs\APIv1\MediaItem MediaItem 



.. php:method:: public string getMediaId ()

	


	:returns: string 



.. php:method:: public int getWidth ()

	Returns the width of the image

	:returns: int 



.. php:method:: public int getHeight ()

	Returns the height of the image

	:returns: int 



.. php:method:: public string getUrl ()

	


	:returns: string 



.. php:method:: public  resizeScale ($maxWidth = NULL, $maxHeight = NULL)

	


	:param  $maxWidth: 

	:param  $maxHeight: 


.. php:method:: public  resizeStretch ($width, $height)

	


	:param  $width: 

	:param  $height: 


.. php:method:: public  resizeCenter ($width, $height)

	


	:param  $width: 

	:param  $height: 


.. php:method:: public  resizeBorder ($width, $height)

	


	:param  $width: 

	:param  $height: 


.. php:method:: public Render\APIs\APIv1\$this $this crop (int $top, int $left, int $width, int $height)

	Crops the Image object.

	:param int $top: 

	:param int $left: 

	:param int $width: 

	:param int $height: 

	:returns: Render\APIs\APIv1\$this $this 



.. php:method:: public Render\APIs\APIv1\$this $this setQuality (int $quality)

	Sets the image quality (if supported by the mime type)

	:param int $quality: 

	:returns: Render\APIs\APIv1\$this $this 



.. php:method:: public Render\APIs\APIv1\$this $this setInterlaced (bool|null $interlaced)

	Sets the interlacing mode

	:param bool|null $interlaced: 

	:returns: Render\APIs\APIv1\$this $this 




