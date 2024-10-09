import React from 'react';
import Image from 'next/image';
import Link from 'next/link';
import logoImg from '@/assets/images/logo.png';

const Logo: React.FC = () => {
    return (
        <Link href="/">
            <Image src={logoImg} alt="Logo" width={150} height={50} />
        </Link>
    );
};

export default Logo;