<?php

declare(strict_types=1);

namespace Meetup\Repository;

use Meetup\Entity\Meetup;
use Doctrine\ORM\EntityRepository;


final class MeetupRepository extends EntityRepository
{

    public function save(Meetup $Meetup) : void
    {
        $this->getEntityManager()->persist($Meetup);
        $this->getEntityManager()->flush($Meetup);
    }

	public function delete(string $id): void
    {
        $this->getEntityManager()->remove($this->find($id));
        $this->getEntityManager()->flush();
    }
}
