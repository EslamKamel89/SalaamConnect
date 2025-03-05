export type Pagination<T> = {
    data: T[];
    links: Links;
    meta: Meta;
};

export type Room = {
    id: number;
    title: string;
    slug: string;
};

export type User = {
    id: number;
    name: string;
    email: string;
    created_at: string;
    email_verified_at?: string;
    avatar?: string;
    isTyping?: boolean;
};

export type Message = {
    id: number;
    room_id: number;
    user_id: number;
    content: string;
    created_at: string;
    user: User;
};

export type Links = {
    first: string;
    last: string;
    prev: string;
    next: string;
};

export type Meta = {
    current_page: number;
    from: number;
    last_page: number;
    links: Link[];
    path: string;
    per_page: number;
    to: number;
    total: number;
};

export type Link = {
    url?: string;
    label: string;
    active: boolean;
};
