<?php

namespace Jostkleigrewe\Ssml;

class SsmlBuilder
{

    /**
     * @var Ssml $ssml
     */
    private $ssml;

    /**
     * SsmlBuilder constructor.
     * @param Ssml $ssml
     */
    public function __construct()
    {
        $this->ssml = new Ssml();
    }

    /**
     * @return Ssml
     */
    public function getSsml(): Ssml
    {
        return $this->ssml;
    }
}