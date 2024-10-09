import React from 'react';
import Link from 'next/link';

const Menu: React.FC = () => {
    return (
        <ul className='top_menu font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700'>
            <li>
                <Link href="/">
                    Home
                </Link>
            </li>
            <li>
                <Link href="/about">
                    About
                </Link>
            </li>
            <li>
                <Link href="/services">
                    Services
                </Link>
            </li>
            <li>
                <Link href="/contact">
                    Contact
                </Link>
            </li>
        </ul>
    );
};

export default Menu;