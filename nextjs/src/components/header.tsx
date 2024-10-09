import React from 'react';
import Menu from './header/menu';
import Logo from './header/logo';

const Header: React.FC = () => {
    return (
        <header className='max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4'>
            <div className="flex items-center space-x-3 rtl:space-x-reverse">
                <Logo />
            </div>
            <div className="hidden w-full md:block md:w-auto" id="navbar-default">
                <Menu />
            </div>
        </header>
    );
};

import { CSSProperties } from 'react';

const styles: { [key: string]: CSSProperties } = {
};

export default Header;