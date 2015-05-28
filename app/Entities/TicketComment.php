<?php namespace TeachMe\Entities;


class TicketComment extends Entity {

    //Un comentario de un tickect esta relacionado a un ticket

    public function ticket()
    {
        return $this->belongsTo(Ticket::getClass());
    }
	//un comentario pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::getClass());
    }

}
