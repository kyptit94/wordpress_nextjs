import React from 'react';
import { useSelector } from 'react-redux';
import { RootState } from '@/store/store';
import { setCardRegister } from '@/store/home';



const RegisterCard: React.FC = () => {
    const { title_left, description_left, title_right, description_right } = useSelector((state: RootState) => state.home.cardRegister);

    const handleInput = (event: React.FormEvent<HTMLDivElement>, key : string) => {
        const target = event.target as HTMLDivElement;
        const value = target.innerText;
        setCardRegister({ title_left, description_left, title_right, description_right , [key]: value });
    };

    return (
        <div className="register-card" id="home-highlights">
            <div className='register-card_item register-card__left'>
                <h2 className='register-card_title' contentEditable onInput={(event) => handleInput(event, "title_left")}>{title_left}</h2>
                <p className='register-card_des' contentEditable onInput={(event) => handleInput(event, "description_left")}>{description_left}</p>
                <button className='register-card_button register-card_button_left'>Register</button>
            </div>
            <div className='register-card_item register-card__right'>
                <h2 className='register-card_title' contentEditable onInput={(event) => handleInput(event, "title_left")}>{title_right}</h2>
                <p className='register-card_des' contentEditable onInput={(event) => handleInput(event, "description_left")}>{description_right}</p>
                <button className='register-card_button register-card_button_right'>Register</button>
            </div>
        </div>
    );
};

export default RegisterCard;
