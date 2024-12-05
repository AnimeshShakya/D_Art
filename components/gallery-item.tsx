"use client"

import Image from "next/image"
import { Button } from "./ui/button"
import { Heart } from "lucide-react"

interface GalleryItemProps {
  title: string
  price: number
  imageUrl: string
  isNew?: boolean
}

export function GalleryItem({ title, price, imageUrl, isNew }: GalleryItemProps) {
  return (
    <div className="group relative bg-gradient-to-br from-purple-900/10 to-blue-900/10 rounded-lg overflow-hidden">
      <div className="aspect-square relative overflow-hidden">
        <Image
          src={imageUrl}
          alt={title}
          fill
          className="object-cover transition-transform duration-300 group-hover:scale-105"
        />
        <button 
          className="absolute top-3 right-3 p-2 rounded-full bg-white/10 backdrop-blur-sm hover:bg-white/20 transition-colors"
          onClick={() => {}}
        >
          <Heart className="w-5 h-5 text-white" />
        </button>
        {isNew && (
          <span className="absolute top-3 left-3 px-2 py-1 text-xs font-medium bg-purple-900 text-white rounded">
            NEW
          </span>
        )}
      </div>
      <div className="p-4">
        <h3 className="text-lg font-medium text-white mb-2">{title}</h3>
        <div className="flex items-center justify-between">
          <p className="text-xl font-bold text-white">${price}</p>
          <Button 
            className="bg-gradient-to-r from-purple-900 to-blue-900 hover:from-purple-800 hover:to-blue-800 text-white"
          >
            Buy Now
          </Button>
        </div>
      </div>
    </div>
  )
}
