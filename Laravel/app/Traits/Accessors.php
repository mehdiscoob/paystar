<?php

namespace App\Traits;


use BadMethodCallException;
use InvalidArgumentException;
use Modules\Podcast\Services\PodcastService;

trait Accessors {
    protected $ids;
    protected $id;
    protected $album_id;
    protected $channel_id;
    protected $hash_id;
    protected $identifier;
    protected $channel;
    protected $sort;
    protected $rss_link;
    protected $object_type;
    protected $email;
    protected $token;
    protected $request;
    protected $entity_type;
    protected $slug;
    protected $type;
    protected $data;
    protected $path;
    protected $perPage;
    protected $category_id;
    protected $page;
    protected $order;
    protected $keyword;
    protected $user_id;
    protected $page_type;
    protected $device;
    protected $feed_url;
    protected $interval;
    private array $counts;
    private $startDate;
    private $endDate;
    private $orderByColumn;
    private $state;
    private $media_id;
    private $time;
    private $filterVal;
    private $filterColumn;
    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRssLink()
    {
        return $this->rss_link;
    }

    public function setRssLink($rss_link)
    {
        $this->rss_link = $rss_link;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken($token)
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPerPage()
    {
        return $this->perPage;
    }

    /**
     * @param mixed $perPage
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
        return $this;
    }

    /**
     * @param mixed $category_id

     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $id
     * @return Accessors
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $path
     * @return Accessors
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $type
     * @return Accessors
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    public function setRequest($request)
    {
        $this->request = $request;
        return $this;
    }

    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $entity_type
     * @return Accessors
     */
    public function setEntityType($entity_type)
    {
        $this->entity_type = $entity_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * @param mixed $order
     * @return Accessors
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $hash_id
     * @return Accessors
     */
    public function setHashId($hash_id)
    {
        $this->hash_id = $hash_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getHashId()
    {
        return $this->hash_id;
    }

    /**
     * @param mixed $object_type
     * @return Accessors
     */
    public function setObjectType($object_type)
    {
        $this->object_type = $object_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObjectType()
    {
        return $this->object_type;
    }

    /**
     * @param mixed $user_id
     * @return Accessors
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $album_id
     * @return Accessors
     */
    public function setAlbumId($album_id)
    {
        $this->album_id = $album_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAlbumId()
    {
        return $this->album_id;
    }

    /**
     * @param mixed $channel_id
     * @return Accessors
     */
    public function setChannelId($channel_id)
    {
        $this->channel_id = $channel_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * @param mixed $identifier
     * @return Accessors
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param mixed $keyword
     * @return Accessors
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param string $page_type
     * @return Accessors
     */
    public function setPageType(string $page_type)
    {
        $this->page_type = $page_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getPageType()
    {
        return $this->page_type;
    }

    /**
     * @param mixed $device
     * @return Accessors
     */
    public function setDevice($device)
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getOrderByColumn()
    {
        return $this->orderByColumn;
    }

    /**
     * @param mixed $orderByColumn
     */
    public function setOrderByColumn($orderByColumn)
    {
        $this->orderByColumn = $orderByColumn;
        return $this;
    }

    /**
     * @param mixed $media_id
     * @return Accessors
     */
    public function setMediaId($media_id)
    {
        $this->media_id = $media_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMediaId()
    {
        return $this->media_id;
    }

    /**
     * @param mixed $state
     * @return Accessors
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $time
     * @return Accessors
     */
    public function setTime($time)
    {
        $this->time = $time;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $interval
     * @return Accessors
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param mixed $feed_url
     * @return Accessors
     */
    public function setFeedUrl($feed_url)
    {
        $this->feed_url = $feed_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFeedUrl()
    {
        return $this->feed_url;
    }

    /**
     * @param mixed $channel
     * @return Accessors
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @return mixed
     */
    public function getFilterVal()
    {
        return $this->filterVal;
    }

    /**
     * @param mixed $filterVal
     */
    public function setFilterVal($filterVal)
    {
        $this->filterVal = $filterVal;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFilterColumn()
    {
        return $this->filterColumn;
    }

    /**
     * @param mixed $filterColumn
     */
    public function setFilterColumn($filterColumn)
    {
        $this->filterColumn = $filterColumn;
        return $this;
    }


}
