<?php

namespace SDN3Q\Model;

class FileMerge implements \JsonSerializable
{
    /**
     * @var int
     */
    public $fileId;

    /**
     * @var int
     */
    public $start;

    /**
     * @var int
     */
    public $end;

    /**
     * FileMerge constructor.
     *
     * @param int $fileId
     * @param int $start
     * @param int $end
     */
    public function __construct(int $fileId, int $start, int $end)
    {
        $this->fileId = $fileId;
        $this->start = $start;
        $this->end = $end;
    }

    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'FileId' => $this->fileId,
            'start' => $this->start,
            'end' => $this->end,
        ];
    }
}
