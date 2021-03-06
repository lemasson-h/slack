<?php

namespace FeelUnique\Slack\Payload;

/**
 * @link Official documentation at https://api.slack.com/methods/files.info
 */
class FilesInfoPayload extends AbstractPayload
{
    /**
     * @var string
     */
    private $file;

    /**
     * @var int|null
     */
    private $count;

    /**
     * @var int|null
     */
    private $page;

    /**
     * @param int|null $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return int|null
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param string $file
     */
    public function setFileId($file)
    {
        $this->file = $file;
    }

    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->file;
    }

    /**
     * @param int|null $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return int|null
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'files.info';
    }
}
