<?php namespace Fortean\MimeType;

/**
* @author Bruce Walter <walter@fortean.com>
* @copyright Copyright (c) 2014
* @license http://www.opensource.org/licenses/mit-license.html MIT License
*/

use Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser;

class MimeType {

    /**
	 * @param path to file
	 * @return mime type of file
	 */
    public function guess($filepath)
    {
        // Return the service extractor object
        return MimeTypeGuesser::getInstance()->guess($filepath);
    }

}