<?php
/**
 * Bu Dosya AnonymFramework'e ait bir dosyadır.
 *
 * @author vahitserifsaglam <vahit.serif119@gmail.com>
 * @see http://gemframework.com
 *
 */


namespace Anonym\Components\View\ViewDriver;


class Driver extends View implements ContentRepositoryInterface, ViewAssignInterface
{

    /**
     * Yeni veri ataması yapar
     *
     * @param string $name Veri ismi
     * @param mixed $value Veriye atanacak değer
     * @return mixed
     */
    public function assign($name = '', $value)
    {
        $this->getParamsRepository()->addParameter($name, $value);
        return $this;
    }


    /**
     * Postalanacak çıktıyı ayarlar
     *
     * @param string $content Postalanacak içerik
     * @throws ContentMustBeStringException
     * @return mixed
     */
    protected function setContent($content = '')
    {
        if(!is_string($content))
        {
            throw new ContentMustBeStringException('Gönderilecek içerik mutlaka string olmalıdır');
        }

        $this->getContentRepository()->setContent($content);
    }



    /**
     * İçeriği döndürür
     *
     * @return string
     */
    public function getContent()
    {
        return $this->getContentRepository()->getContent();
    }

    /**
     * Değerleri döndürür
     *
     * @return array
     */
    protected function getParams()
    {
        return $this->getParamsRepository()->getParams();
    }

    /**
     * Parametreleri atar
     *
     * @param array $params
     * @return $this
     */
    protected function setParams(array $params)
    {
        $this->getParamsRepository()->setParams($params);
        return $this;
    }

    /**
     * Dosyaya isim ekler
     *
     * @param string $fileName
     * @return $this
     */
    protected function add($fileName = '')
    {
        $this->getNameRepository()->addName($fileName);
        return $this;
    }
}