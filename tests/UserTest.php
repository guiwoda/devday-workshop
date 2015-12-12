<?php
class UserTest extends PHPUnit_Framework_TestCase {

    function test_necesito_email_y_password_para_crearlo() {
        $user = new \DevDay\User("guiwoda@gmail.com", '123456');

        $this->assertNotNull($user);
        $this->assertInstanceOf('DevDay\User', $user);
    }

    function test_me_tiene_que_dar_el_email() {
        $user = new \DevDay\User("guiwoda@gmail.com", '123456');

        $this->assertEquals("guiwoda@gmail.com", $user->getEmail());
    }

    function test_puede_validar_una_contrasena()
    {
        $user = new \DevDay\User("guiwoda@gmail.com", '123456');

        $this->assertTrue($user->checkPassword('123456'));
        $this->assertFalse($user->checkPassword('ghe45gerf'));
    }

    function test_un_usuario_empieza_sin_amigos() {
        $user = new \DevDay\User("guiwoda@gmail.com", '123456');

        $this->assertEmpty($user->getFriends());
        $this->assertEquals([], $user->getFriends());
    }

    function test_puedo_agregar_un_amigo() {
        $user = new \DevDay\User("guiwoda@gmail.com", '123456');

        $user->addFriend(new \DevDay\User("jolo@nosetumail.com", 'hax0r'));

        $this->assertCount(1, $user->getFriends());
    }
}
