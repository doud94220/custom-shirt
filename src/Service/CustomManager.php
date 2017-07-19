<?php


namespace Service;

use Symfony\Component\HttpFoundation\Session\Session;

class CustomManager 
{
    private $session;
    
    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    private function init()
    {
        if (!$this->session->has('custom')) {
            $this->session->set('custom', []);
        }
    }

    public function setTissu($tissu)
    {
        $this->init();
        $custom = $this->session->get('custom');
        $custom['tissu'] = $tissu;
        $this->session->set('custom', $custom);
        
    }

    public function setBouton($bouton)
    {
        $this->init();
        $custom = $this->session->get('custom');
        $custom['bouton'] = $bouton;
        $this->session->set('custom', $custom);
    }
    
     public function setCol($col)
    {
        $this->init();
        $custom = $this->session->get('custom');
        $custom['col'] = $col;
        $this->session->set('custom', $custom);
    }
    
      public function setCoupe($coupe)
    {
        $this->init();
        $custom = $this->session->get('custom');
        $custom['coupe'] = $coupe;
        $this->session->set('custom', $custom);
    }
    
    public function getCustom()
    {
        return $this->session->get('custom');
    }
    

    
    public function putCustominSession($custom)
    {
        if(!$this->session)
        {
           $_SESSION[] = $this->session->get('custom');
        }
        else
        {
            
        }
    }
}
