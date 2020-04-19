<?php
include_once 'Point.php';

class MovablePoint extends Point
{
    protected $xSpeed;
    protected $ySpeed;

    public function __construct($x = 0.0, $y = 0.0, $xSpeed = 0.0, $ySpeed = 0.0)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->getXSpeed(), $this->getYSpeed()];
    }

    public function move()
    {
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this->getX() . $this->getY();
    }

    function __toString()
    {
        return parent::__toString() . ", speed = ($this->xSpeed, $this->ySpeed)";
    }
}