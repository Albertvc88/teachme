<?php namespace TeachMe\Entities;



class Ticket extends Entity {

    //Un ticket tiene un autor

    public function author()
    {
        return $this->belongsTo(User::getClass());
    }
	//Un ticket tiene muchos comentarios

    public function comments()
    {
        //PhP > 5
       //return $this->hasMany(TicketComment::class);

        //return $this->hasMany('TeachMe\Entities\TicketComment');//php 4 o menos colocar el namespace completo

        //funcion creada en Entity.php para obtener la clase con mejor precioscon y mas facil
        return $this->hasMany(TicketComment::getClass());
    }

    //tiene y pertene a muchos
    public function voters()
    {
        return $this->belongsToMany(User::getClass(), 'ticket_votes');
    }

    public function getOpenAttribute()
    {
        //retorna verdadero
        return $this->status == 'open';
    }

}
