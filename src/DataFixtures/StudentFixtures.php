<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StudentFixtures extends Fixture
{
    const STUDENTS = [
        [
            'name' => 'Smith',
            'firstname' => 'John',
            'email' => 'jsmith@outlook.com',
            'phone' => '0601020304',
            'registration_file' => 0,
        ],
        [
            'name' => 'Duntade',
            'firstname' => 'Edward',
            'email' => 'eduntade@outlook.com',
            'phone' => '0601020305',
            'registration_file' => 0,
        ],
        [
            'name' => 'Ribe',
            'firstname' => 'Marie',
            'email' => 'mribe@outlook.com',
            'phone' => '0601020306',
            'registration_file' => 0,
        ],
        [
            'name' => 'Honord',
            'firstname' => 'Alice',
            'email' => 'ahonord@outlook.com',
            'phone' => '0601020307',
            'registration_file' => 0,
        ],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::STUDENTS as $studentData) {
            $student = new Student();
            $student->setName($studentData['name']);
            $student->setFirstname($studentData['firstname']);
            $student->setEmail($studentData['email']);
            $student->setPhone($studentData['phone']);
            $student->setRegistrationFile($studentData['registration_file']);

            $manager->persist($student);
        }

        $manager->flush();
    }
}
